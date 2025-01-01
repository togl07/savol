def solve(s, k):
    words = s.split()
    lines = []
    current_line = []
    current_length = 0

    for word in words:
        if current_length + len(word) + len(current_line) > k:
            lines.append(current_line)
            current_line = []
            current_length = 0
        current_line.append(word)
        current_length += len(word)

    if current_line:
        lines.append(current_line)

    justified_lines = []
    for i, line in enumerate(lines):
        if i == len(lines) - 1:
            justified_lines.append(" ".join(line))
            continue

        total_spaces = k - sum(len(word) for word in line)
        if len(line) == 1:
            justified_lines.append(line[0] + " " * total_spaces)
            continue

        spaces_between = total_spaces // (len(line) - 1)
        extra_spaces = total_spaces % (len(line) - 1)

        justified_line = ""
        for j, word in enumerate(line):
            justified_line += word
            if j < len(line) - 1:
                justified_line += " " * (spaces_between + (1 if j < extra_spaces else 0))
        justified_lines.append(justified_line)

    return "\n".join(justified_lines)

s = input()
K = int(input())
print(solve(s, K))
